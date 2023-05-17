<?php
/**
 * WP Ultimate CSV Importer plugin file.
 *
 * Copyright (C) 2010-2020, Smackcoders Inc - info@smackcoders.com
 */

namespace Smackcoders\FCSV;

if (!defined('ABSPATH'))
        exit; // Exit if accessed directly

class LangZH
{
        private static $chinese_instance = null, $media_instance;

        public static function getInstance()
        {
                if (LangZH::$chinese_instance == null) {
                        LangZH::$chinese_instance = new LangZH;
                        return LangZH::$chinese_instance;
                }
                return LangZH::$chinese_instance;
        }

        public static function contents()
        {
                $response = array(
					'ImportUpdate' => '导入更新',
					'Exporterwithadvancedfilters' => '具有高级过滤器的导出器',
					'Exportfiltereddata' => '导出过滤后的数据',
                	'Exportfiltereddatadesc' => '让您使用不同的高级过滤器仅获取所需的数据',
                	'Backupineditableformat' => '以可编辑格式备份',
                	'Backupineditableformatdesc' => '以 4 种不同的文件格式备份，例如 CSV, XML, JSON,XLS.',
                	'AutoScheduledBackups' => '自动计划备份',
                	'AutoScheduledBackupsdesc' => '计划导出有助于定期备份为可编辑的文本文件格式。',
					'Updateolderpostsfromsingleimport' => '通过一次导入更新旧帖子',
					'AutoSchedulewithreusabletemplates' => '使用可重复使用的模板自动安排',
					'JetEngineMetaboxToolsetTypesACFproFreeandPodsFieldPostPluginsImporter' => 'JetEngine, Metabox, Toolset Types, ACF pro / Free and Pods Field/Post 插件导入器',
					'AIOWooCommerceImportSuit' => 'AIO WooCommerce 进口套装',
					'WPMLImporter' => 'WPML 进口商',
					'Buynow' => '立即购买！',
					'SEOPluginsDataImporterRankMathYoastandAllinOneSEO' => 'SEO 插件数据导入器 - RankMath, SEOPress, Yoast and All in One SEO',
					'Dashboard' => '仪表板',
					'Manager' => '经理',
					'Export' => '出口',
					'Settings' => '设置',
					'Support' => '支持',
					'UploadfromDesktop' => '从桌面上传',
					'UploadfromFTPSFTP' => '从FTPSFTP上传',
					'UploadfromFTP' => '从FTPSFTP上传',
					'UploadfromURL' => '从 URL 上传',
					'ChoosFileintheServer' => '选择服务器中的文件',
					'Drag&Dropyourfilesor' => '拖放您的文件或',
					'Browse' => '浏览',
					'NewItem' => '新物品',
					'ExistingItems' => '现有项目',
					'ImportEachRecordAs' => '导入每个记录作为',
					'Continue' => '继续',
					'Search' => '搜索',
					'FromDate' => '从日期',
					'ToDate' => '迄今为止',
					'SEARCH' => '搜索',
					'SavedTemplate' => '保存的模板',
					'TEMPLATES' => '模板',
					'MATCHEDCOLUMNSCOUNT' => '匹配列数',
					'MODULE' => '模块',
					'CREATEDTIME' => '创建时间',
					'ACTION' => '行动',
					'USETEMPLATE' => '使用模板',
					'CREATENEWMAPPING' => '创建新映射',
					'BACK' => '背部',
					'ADVANCEDMODE' => '高级模式',
					'DRAGDROPMODE' => '拖放模式',
					'WordpressFields' => 'WordPress 字段',
					'WPFIELDS' => 'WP 字段',
					'CSVHEADER' => 'CSV头',
					'Action' => '行动',
					'Name' => '姓名',
					'HINT' => '暗示',
					'Example' => '例子',
					'WordPressCoreFields' => 'WordPress核心字段',
					'ACFFreeFields' => 'ACFFreeFields',
					'ACFFields' => 'ACF 字段',
					'ACFGroupFields' => 'ACF 组字段',
					'ACFProFields' => 'ACFProFields',
					'ACFRepeaterFields' => 'ACFRepeater 字段',
					'TypesCustomFields' => '类型自定义字段',
					'PodsFields' => 'PodsFields',
					'JobListingFields' => '工作列表字段',
					'CustomFieldSuite' => '自定义字段套件',
					'AllInOneSeoFields' => 'AllInOneSeo 字段',
					'MetaBoxFields' => '元框字段',
					'YoastSeoFields' => 'YoastSeo 字段',
					'RankMathFields' => 'RankMathFields',
					'RankMathProFields' => 'RankMathProFields',
					'BillingAndShippingInformation' => '计费和运输信息',
					'CustomFieldsWPMemberFields' => 'CustomFieldsWPMemberFields',
					'CustomFieldsMemberFields' => '自定义字段成员字段',
					'ProductMetaFields' => '产品元字段',
					'ProductAttrFields' => '产品属性字段',
					'ProductBundleMetaFields' => '产品包元字段',
					'OrderMetaFields' => '订单元字段',
					'CouponMetaFields' => '优惠券元字段',
					'RefundMetaFields' => '退款元字段',
					'WPECommerceCustomFields' => 'WPECommerceCustomFields',
					'EventsManagerFields' => '事件管理器字段',
					'WPMLFields' => 'WPML 字段',
					'CMB2CustomFields' => 'CMB2自定义字段',
					'JetEngineFields' => 'JetEngine 字段',
					'JetEngineRFFields' => 'JetEngine 射频场',
					'JetEngineCPTFields' => 'JetEngineCPT 字段',
					'JetEngineCPTRFFields' => 'JetEngineCPTRF 字段',
					'JetEngineTaxonomyFields' => 'JetEngine分类领域',
					'JetEngineTaxonomyRFFields' => 'JetEngine 分类法RFFields',
					'JetEngineRelationsFields' => 'JetEngine关系字段',
					'CourseSettingsFields' => '课程设置字段',
					'CurriculumSettingsFields' => '课程设置字段',
					'QuizSettingsFields' => '测验设置字段',
					'LessonSettingsFields' => '课程设置字段',
					'QuestionSettingsFields' => '问题设置字段',
					'OrderSettingsFields' => '订单设置字段',
					'WordPressCustomFields' => 'WordPress自定义字段',
					'TermsandTaxonomies' => '术语和分类法',
					'IsSerialized' => 'IsSerialized',
					'NoCustomFieldsFound' => '未找到自定义字段',
					'MediaUploadFields' => '媒体上传字段',
					'UploadMedia' => '上传媒体',
					'UploadedListofFiles' => '上传的文件列表',
					'UploadedMediaFileLists' => '上传的媒体文件列表',
					'SavethismappingasTemplate' => '将此映射保存为模板',
					'Save' => '节省',
					'Doyouneedtoupdatethecurrentmapping' => '是否需要更新当前映射',
					'Savethecurrentmappingasnewtemplate' => '将当前映射保存为新模板',
					'Back' => '后退',
					'Size' => '尺寸',
					'MediaHandling' => '媒体处理',
					'Downloadexternalimagestoyourmedia' => '将外部图像下载到您的媒体',
					'ImageHandling' => '图像处理',
					'Usemediaimagesifalreadyavailable' => '使用媒体图像如果已经可用',
					'Doyouwanttooverwritetheexistingimages' => '是否要覆盖现有图像',
					'ImageSizes' => '图像尺寸',
					'Thumbnail' => '缩略图',
					'Medium' => '中等的',
					'MediumLarge' => '中大',
					'Large' => '大的',
					'Custom' => '风俗',
					'Slug' => '蛞蝓',
					'Width' => '宽度',
					'Height' => '高度',
					'Addcustomsizes' => '添加自定义尺寸',
					'PostContentImageOption' => 'PostContentImageOption',
					'DownloadPostContentExternalImagestoMedia' => '将发布内容外部图像下载到媒体',
					'MediaSEOAdvancedOptions' => 'MediaSEO高级选项',
					'polylangfields' => '多语言场',
					'SetimageTitle' => '设置图像标题',
					'SetimageCaption' => '设置图片标题',
					'SetimageAltText' => '设置图像替代文本',
					'SetimageDescription' => '设置图像描述',
					'Changeimagefilenameto' => '将图像文件名更改为',
					'ImportconfigurationSection' => '导入配置部分',
					'EnablesafeprestateRollback' => '启用safeprestateRollback',
					'Backupbeforeimport' => '导入前备份',
					'DoyouwanttoSWITCHONMaintenancemodewhileimport' => 'DoyouwanttoSWITCHONMaintenancemodewhileimport',
					'Doyouwanttohandletheduplicateonexistingrecords' => '是否要处理重复的现有记录',
					'Mentionthefieldswhichyouwanttohandleduplicates' => '提及您要处理重复的字段',
					'DoyouwanttoUpdateanexistingrecords' => '是否要更新现有记录',
					'Updaterecordsbasedon' => '更新记录基于',
					'DeletedatafromWordPress' => '从WordPress中删除数据',
					'EnabletodeletetheitemsnotpresentinCSVXMLfile' => '启用以删除 CSV XML 文件中不存在的项目',
					'DoyouwanttoSchedulethisImport' => 'DoyouwanttoSchedule this Import',
					'ScheduleDate' => '计划日期',
					'ScheduleFrequency' => '调度频率',
					'SIMPLEMODE' => '简单模式',
					'TimeZone' => '时区',
					'ScheduleTime' => '计划时间',
					'Schedule' => '日程',
					'Import' => '进口',
					'Format' => '格式',
					'OneTime' => '一度',
					'Daily' => '日常的',
					'Weekly' => '每周',
					'Monthly' => '月刊',
					'Hourly' => '每小时',
					'Every30mins' => '每 30 分钟',
					'Every15mins' => '每15分钟',
					'Every10mins' => '每10分钟',
					'Every5mins' => '每 5 分钟',
					'FileName' => '文件名',
					'FileSize' => '文件大小',
					'Process' => '过程',
					'Totalnoofrecords' => 'Totalnoofrecords',
					'CurrentProcessingRecord' => '当前处理记录',
					'RemainingRecord' => '剩余记录',
					'Completed' => '完全的',
					'TimeElapsed' => '时间流逝',
					'approximate' => '近似',
					'DownloadLog' => '下载日志',
					'NoRecord' => '没有记录',
					'UploadedCSVFileLists' => '上传的CSV文件列表',
					'Hostname' => '主机名',
					'HostPort' => '主机端口',
					'HostUsername' => '主机用户名',
					'HostPassword' => '主机密码',
					'HostPath' => '主机路径',
					'DefaultPort' => '默认端口',
					'FTPUsername' => 'FTP用户名',
					'FTPPassword' => 'FTP密码',
					'ConnectionType' => '连接类型',
					'ImportersActivity' => '进口商活动',
					'ImportStatistics' => '进口统计',
					'FileManager' => '文件管理器',
					'SmartSchedule' => '智能调度',
					'ScheduledExport' => '预定出口',
					'Templates' => '模板',
					'LogManager' => '日志管理器',
					'NotSelectedAnyTab' => 'NotSelectedAnyTab',
					'EventInfo' => '事件信息',
					'EventDate' => '活动日期',
					'EventStatus' => '事件状态',
					'Actions' => '行动',
					'Date' => '日期',
					'Purpose' => '目的',
					'Revision' => '修订',
					'Select' => '选择',
					'Inserted' => '已插入',
					'Updated' => '更新',
					'Skipped' => '跳过',
					'Delete' => '删除',
					'Noeventsfound' => '未找到任何事件',
					'ScheduleInfo' => '日程信息',
					'ScheduledDate' => '约定的日期',
					'ScheduledTime' => '计划的时间',
					'Youhavenotscheduledanyevent' => '你没有安排任何活动',
					'Frequency' => '频率',
					'Time' => '时间',
					'EditSchedule' => '编辑时间表',
					'SaveChanges' => '保存更改',
					'TemplateInfo' => '模板信息',
					'TemplateName' => '模板名称',
					'Module' => '模块',
					'CreatedTime' => '创建时间',
					'NoTemplateFound' => '未找到模板',
					'Download' => '下载',
					'NoLogRecordFound' => 'NoLogRecordFound',
					'GeneralSettings' => '通用设置',
					'DatabaseOptimization' => '数据库优化',
					'SecurityandPerformance' => '安全与性能',
					'Documentation' => '文档',
					'MediaReport' => '媒体报道',
					'DropTable' => '拖放表',
					'Ifenabledplugindeactivationwillremoveplugindatathiscannotberestored' => '如果启用插件停用将删除插件数据这无法恢复',
					'Scheduledlogmails' => '预定的日志邮件',
					'Enabletogetscheduledlogmails' => '启用获取计划的日志邮件',
					'Sendpasswordtouser' => '发送密码给用户',
					'Enabletosendpasswordinformationthroughemail' => '启用通过电子邮件发送密码信息',
					'WoocommerceCustomattribute' => 'Woocommerce自定义属性',
					'Enablestoregisterwoocommercecustomattribute' => '启用注册woocommerce自定义属性',
					'PleasemakesurethatyoutakenecessarybackupbeforeproceedingwithdatabaseoptimizationThedatalostcantbereverted' => '请确保在进行数据库优化之前进行必要的备份丢失的数据无法恢复',
					'DeleteallorphanedPostPageMeta' => '删除allorphanedPostPageMeta',
					'Deleteallunassignedtags' => '删除所有未分配的标签',
					'DeleteallPostPagerevisions' => '删除所有PostPagerevisions',
					'DeleteallautodraftedPostPage' => '删除所有autodraftedPostPage',
					'DeleteallPostPageintrash' => 'DeleteallPostPageintrash',
					'DeleteallCommentsintrash' => 'DeleteallCommentsintrash',
					'DeleteallUnapprovedComments' => 'DeleteallUnapprovedComments',
					'DeleteallPingbackComments' => '删除所有Pingback评论',
					'DeleteallTrackbackComments' => 'DeleteallTrackbackComments',
					'DeleteallSpamComments' => '删除所有垃圾邮件评论',
					'RunDBOptimizer' => '运行数据库优化器',
					'DatabaseOptimizationLog' => '数据库优化日志',
					'noofOrphanedPostPagemetahasbeenremoved' => 'noofOrphanedPostPage 元已被删除',
					'noofUnassignedtagshasbeenremoved' => 'noof未分配标签已被删除',
					'noofPostPagerevisionhasbeenremoved' => 'noofPostPagerevision 已被删除',
					'noofAutodraftedPostPagehasbeenremoved' => 'noofAutodrafted 帖子页面已被删除',
					'noofPostPageintrashhasbeenremoved' => 'noofPostPageintrash 已被删除',
					'noofSpamcommentshasbeenremoved' => 'noofSpam 评论已被删除',
					'noofCommentsintrashhasbeenremoved' => 'noofCommentsintrash 已被删除',
					'noofUnapprovedcommentshasbeenremoved' => 'noof未经批准的评论已被删除',
					'noofPingbackcommentshasbeenremoved' => 'noofPingback 评论已被删除',
					'noofTrackbackcommentshasbeenremoved' => 'noofTrackback 评论已被删除',
					'Allowauthorseditorstoimport' => '允许作者编辑导入',
					'Allowauthorseditorstoimport' => '允许作者编辑导入',
					'Thisenablesauthorseditorstoimport' => '这使作者编辑者能够导入',
					'MinimumrequiredphpinivaluesIniconfiguredvalues' => 'MinimumrequiredphpinivaluesIniconfiguredvalues',
					'Variables' => '变量',
					'SystemValues' => '系统价值观',
					'MinimumRequirements' => '最低要求',
					'RequiredtoenabledisableLoadersExtentionsandmodules' => '需要启用可加载程序扩展和模块',
					'DebugInformation' => '调试信息',
					'SmackcodersGuidelines' => 'Smackcoders指南',
					'DevelopmentNews' => '发展新闻',
					'WhatsNew' => '什么是新的',
					'YoutubeChannel' => '优酷频道',
					'OtherWordPressPlugins' => '其他WordPress插件',
					'Count' => '数数',
					'ImageType' => '图像类型',
					'Status' => '地位',
					'Loading' => '正在加载',
					'LoveWPUltimateCSVImporterGivea5starreviewon' => 'LoveWPUltimateCSV进口商给五星评论',
					'ContactSupport' => '联系支持',
					'Email' => '电子邮件',
					'Supporttype' => '支持类型',
					'BugReporting' => '错误报告',
					'FeatureEnhancement' => '功能增强',
					'Message' => '信息',
					'Send' => '发送',
					'NewsletterSubscription' => '通讯订阅',
					'Subscribe' => '订阅',
					'Note' => '笔记',
					'SubscribetoSmackcodersMailinglistafewmessagesayear' => '订阅 Smackcoders 邮件列表几条消息一年',
					'Pleasedraftamailto' => '请将邮件发送至',
					'Ifyoudoesnotgetanyacknowledgementwithinanhour' => '如果你在一小时内没有得到任何确认',
					'Selectyourmoduletoexportthedata' => '选择您的模块以导出数据',
					'Toexportdatabasedonthefilters' => '基于过滤器导出数据',
					'ExportFileName' => '导出文件名',
					'AdvancedSettings' => '高级设置',
					'ExportType' => '出口类型',
					'SplittheRecord' => '拆分记录',
					'AdvancedFilters' => '高级过滤器',
					'Exportdatawithautodelimiters' => '使用自动分隔符导出数据',
					'Delimiters' => '分隔符',
					'OtherDelimiters' => '其他分隔符',
					'Exportdataforthespecificperiod' => '导出特定时期的数据',
					'StartFrom' => '从...开始',
					'EndTo' => '终点',
					'Exportdatawiththespecificstatus' => '导出具有特定状态的数据',
					'All' => '全部',
					'Publish' => '发布',
					'Sticky' => '黏',
					'Private' => '私人的',
					'Protected' => '受保护',
					'Draft' => '草稿',
					'Pending' => '待办的',
					'Exportdatabyspecificauthors' => '按特定作者导出数据',
					'Authors' => '作者',
					'ExportdatabasedonspecificInclusions' => '基于特定包含导出数据',
					'DoyouwanttoSchedulethisExport' => 'DoyouwanttoSchedulethisExport',
					'SelectTimeZone' => '选择时区',
					'ScheduleExport' => '计划导出',
					'DataExported' => '数据导出',
					'FilePath' => '文件路径',
                );
                return $response;
        }
}

